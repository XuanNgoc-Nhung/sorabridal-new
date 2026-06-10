#!/usr/bin/env python3
"""Split users/index.blade.php into partials and extract CSS."""

import re
from pathlib import Path

BASE = Path("/Applications/XAMPP/xamppfiles/htdocs/sorabridal-new")
SRC = BASE / "resources/views/users/index.blade.php"
BACKUP = SRC.with_suffix(".blade.php.bak")
SOURCE = BACKUP if BACKUP.exists() else SRC
PARTIALS = BASE / "resources/views/users/partials"
SECTIONS = PARTIALS / "sections"
CSS_DIR = BASE / "public/assets/mimosa/css"

if not BACKUP.exists() and SRC.exists():
    BACKUP.write_text(SRC.read_text(encoding="utf-8"), encoding="utf-8")
    print(f"Backed up original to {BACKUP.name}")

lines = SOURCE.read_text(encoding="utf-8").splitlines(keepends=True)

head_end = next(i for i, l in enumerate(lines) if l.strip() == "</head>")
head_lines = lines[: head_end + 1]

inline_css_parts = []
new_head_lines = []
in_style = False
style_buf = []

for line in head_lines:
    if re.match(r"\s*<style", line):
        in_style = True
        style_buf = []
        continue
    if in_style:
        if "</style>" in line:
            in_style = False
            content = "".join(style_buf).strip()
            if content:
                inline_css_parts.append(content)
            continue
        style_buf.append(line)
        continue
    new_head_lines.append(line)

body_start = head_end + 1
body_style_start = None
body_style_end = None
for i in range(body_start, len(lines)):
    if lines[i].strip() == "<style>" and body_style_start is None:
        body_style_start = i
    if body_style_start is not None and "</style>" in lines[i]:
        body_style_end = i
        break

if body_style_start is not None:
    style_content = "".join(lines[body_style_start + 1 : body_style_end]).strip()
    if style_content:
        inline_css_parts.append(style_content)

(CSS_DIR / "inline-styles.css").write_text("\n\n".join(inline_css_parts), encoding="utf-8")

sections = [
    ("header", 1937, 2435),
    ("loader", 2453, 2464),
    ("banner", 2466, 2512),
    ("brand", 2512, 2531),
    ("service", 2531, 2621),
    ("reason", 2621, 2676),
    ("collection", 2676, 2867),
    ("collection-video", 2867, 2922),
    ("collection-tiktok", 2922, 2967),
    ("concept", 2967, 3090),
    ("address", 3090, 3156),
    ("famous", 3156, 3253),
    ("customer", 3253, 4241),
    ("feedback", 4241, 4324),
    ("news", 4324, 6238),
    ("partner", 6238, 6309),
    ("connect", 6309, 6537),
    ("footer", 6537, 6687),
    ("scripts", 6687, len(lines)),
]

for name, start, end in sections:
    content = "".join(lines[start:end])
    out = (
        SECTIONS / f"{name}.blade.php"
        if name not in ("header", "loader", "footer", "scripts")
        else PARTIALS / f"{name}.blade.php"
    )
    out.write_text(content, encoding="utf-8")
    print(f"Wrote {out.name}: lines {start + 1}-{end} ({end - start} lines)")

css_links = """    <link rel="stylesheet" href="{{ asset('assets/mimosa/fonts/nunito.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/contact-form-7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mimosa/css/inline-styles.css') }}">
"""

head_partial = []
for line in new_head_lines:
    if "fonts.googleapis.com" in line or "fonts.gstatic.com" in line:
        continue
    if "cdnjs.cloudflare.com/ajax/libs/font-awesome" in line:
        continue
    if line.strip() == "/>":
        continue
    if "mimosawedding.vn/wp-content/themes/mimosa/assets/css/" in line:
        continue
    if "contact-form-7/includes/css/styles.css" in line:
        continue
    if "jquery-core-js" in line or "jquery-migrate-js" in line:
        continue
    if line.strip().startswith("<!DOCTYPE") or line.strip().startswith("<html"):
        continue
    head_partial.append(line)
    if "<!-- style -->" in line:
        head_partial.append(css_links)

(PARTIALS / "head.blade.php").write_text("".join(head_partial), encoding="utf-8")

index_content = """<!DOCTYPE html>
<html lang="en">
@include('users.partials.head')
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="{{ asset('assets/mimosa/js/facebook-sdk.js') }}#xfbml=1&version=v17.0&appId=2041254136266004&autoLogAppEvents=1"></script>
    @include('users.partials.header')
    @include('users.partials.loader')
    <div class="main_page">
        <div class="page_home" id="main">
            @include('users.partials.sections.banner')
            @include('users.partials.sections.brand')
            @include('users.partials.sections.service')
            @include('users.partials.sections.reason')
            @include('users.partials.sections.collection')
            @include('users.partials.sections.collection-video')
            @include('users.partials.sections.collection-tiktok')
            @include('users.partials.sections.concept')
            @include('users.partials.sections.address')
            @include('users.partials.sections.famous')
            @include('users.partials.sections.customer')
            @include('users.partials.sections.feedback')
            @include('users.partials.sections.news')
            @include('users.partials.sections.partner')
            @include('users.partials.sections.connect')
    @include('users.partials.footer')
    @include('users.partials.scripts')
</body>
</html>
"""

(SRC.parent / "index.blade.php").write_text(index_content, encoding="utf-8")

ASSET_MAP = {
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/jquery.min.js": "assets/mimosa/js/jquery.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/aos.js": "assets/mimosa/js/aos.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/bootstrap.min.js": "assets/mimosa/js/bootstrap.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/jquery.fancybox.min.js": "assets/mimosa/js/jquery.fancybox.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/slick.min.js": "assets/mimosa/js/slick.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/list.min.js": "assets/mimosa/js/list.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/lazysizes.min.js": "assets/mimosa/js/lazysizes.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/ls.unveilhooks.min.js": "assets/mimosa/js/ls.unveilhooks.min.js",
    "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/custom.js": "assets/mimosa/js/custom.js",
    "https://mimosawedding.vn/wp-includes/js/dist/hooks.min.js?ver=7496969728ca0f95732d": "assets/mimosa/js/hooks.min.js",
    "https://mimosawedding.vn/wp-includes/js/dist/i18n.min.js?ver=781d11515ad3d91786ec": "assets/mimosa/js/i18n.min.js",
    "https://mimosawedding.vn/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.1.5": "assets/mimosa/js/contact-form-7-swv.js",
    "https://mimosawedding.vn/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.1.5": "assets/mimosa/js/contact-form-7.js",
    "https://mimosawedding.vn/wp-content/plugins/interlinks-manager/public/assets/js/track-internal-links.js?ver=1.40": "assets/mimosa/js/track-internal-links.js",
    "https://www.tiktok.com/embed.js": "assets/mimosa/js/tiktok-embed.js",
}

scripts_path = PARTIALS / "scripts.blade.php"
scripts_raw = scripts_path.read_text(encoding="utf-8")
for url, path in ASSET_MAP.items():
    scripts_raw = scripts_raw.replace(f'src="{url}"', f'src="{{{{ asset(\'{path}\') }}}}"')
    scripts_raw = scripts_raw.replace(f"src='{url}'", f"src=\"{{{{ asset('{path}') }}}}\"")

scripts_raw = re.sub(r"</body>\s*</html>\s*", "", scripts_raw)
scripts_raw = scripts_raw.replace(
    'script.src = "https://www.tiktok.com/embed.js"',
    "script.src = \"{{ asset('assets/mimosa/js/tiktok-embed.js') }}\"",
)
scripts_path.write_text(scripts_raw.strip() + "\n", encoding="utf-8")

footer_path = PARTIALS / "footer.blade.php"
footer_raw = footer_path.read_text(encoding="utf-8")
footer_raw = footer_raw.replace(
    'src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0&appId=2041254136266004&autoLogAppEvents=1"',
    'src="{{ asset(\'assets/mimosa/js/facebook-sdk-vi.js\') }}#xfbml=1&version=v16.0&appId=2041254136266004&autoLogAppEvents=1"',
)
footer_path.write_text(footer_raw, encoding="utf-8")

print("Done refactoring index.blade.php")

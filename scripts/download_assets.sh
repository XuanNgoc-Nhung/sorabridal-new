#!/usr/bin/env bash
set -euo pipefail

BASE="/Applications/XAMPP/xamppfiles/htdocs/sorabridal-new/public/assets/mimosa"
CSS="$BASE/css"
JS="$BASE/js"
FONTS="$BASE/fonts"
WEBFONTS="$BASE/webfonts"

mkdir -p "$CSS" "$JS" "$FONTS" "$WEBFONTS"

download() {
  local url="$1"
  local out="$2"
  if [ ! -s "$out" ]; then
    echo "Downloading $url"
    curl -fsSL "$url" -o "$out"
  else
    echo "Skip existing $out"
  fi
}

# Theme CSS
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/style.css" "$CSS/style.css"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/media.css" "$CSS/media.css"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/bootstrap.min.css" "$CSS/bootstrap.min.css"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/aos.css" "$CSS/aos.css"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/jquery.fancybox.min.css" "$CSS/jquery.fancybox.min.css"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/css/slick.min.css" "$CSS/slick.min.css"
download "https://mimosawedding.vn/wp-content/plugins/contact-form-7/includes/css/styles.css" "$CSS/contact-form-7.css"

# Font Awesome
download "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" "$CSS/font-awesome.min.css"
download "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/webfonts/fa-brands-400.woff2" "$WEBFONTS/fa-brands-400.woff2"
download "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/webfonts/fa-regular-400.woff2" "$WEBFONTS/fa-regular-400.woff2"
download "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/webfonts/fa-solid-900.woff2" "$WEBFONTS/fa-solid-900.woff2"
download "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/webfonts/fa-v4compatibility.woff2" "$WEBFONTS/fa-v4compatibility.woff2"

sed -i '' 's|../webfonts/|/assets/mimosa/webfonts/|g' "$CSS/font-awesome.min.css"

# Google Font Nunito
download "https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" "$FONTS/nunito.css"
while IFS= read -r url; do
  [ -z "$url" ] && continue
  name=$(basename "${url%%\?*}")
  dest="$FONTS/$name"
  if [ ! -s "$dest" ]; then
    echo "Font: $name"
    curl -fsSL "$url" -o "$dest"
  fi
  sed -i '' "s|$url|/assets/mimosa/fonts/$name|g" "$FONTS/nunito.css"
done < <(grep -oE 'https://fonts\.gstatic\.com[^)]+' "$FONTS/nunito.css" | sort -u)

# Theme JS
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/jquery.min.js" "$JS/jquery.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/aos.js" "$JS/aos.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/bootstrap.min.js" "$JS/bootstrap.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/jquery.fancybox.min.js" "$JS/jquery.fancybox.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/slick.min.js" "$JS/slick.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/list.min.js" "$JS/list.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/lazysizes.min.js" "$JS/lazysizes.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/ls.unveilhooks.min.js" "$JS/ls.unveilhooks.min.js"
download "https://mimosawedding.vn/wp-content/themes/mimosa/assets/js/custom.js" "$JS/custom.js"

# WordPress / plugin JS
download "https://mimosawedding.vn/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" "$JS/jquery-core.min.js"
download "https://mimosawedding.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" "$JS/jquery-migrate.min.js"
download "https://mimosawedding.vn/wp-includes/js/dist/hooks.min.js?ver=7496969728ca0f95732d" "$JS/hooks.min.js"
download "https://mimosawedding.vn/wp-includes/js/dist/i18n.min.js?ver=781d11515ad3d91786ec" "$JS/i18n.min.js"
download "https://mimosawedding.vn/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.1.5" "$JS/contact-form-7-swv.js"
download "https://mimosawedding.vn/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.1.5" "$JS/contact-form-7.js"
download "https://mimosawedding.vn/wp-content/plugins/interlinks-manager/public/assets/js/track-internal-links.js?ver=1.40" "$JS/track-internal-links.js"

# External SDKs
download "https://connect.facebook.net/en_GB/sdk.js" "$JS/facebook-sdk.js"
download "https://connect.facebook.net/vi_VN/sdk.js" "$JS/facebook-sdk-vi.js"
download "https://www.tiktok.com/embed.js" "$JS/tiktok-embed.js"

echo "All assets downloaded."

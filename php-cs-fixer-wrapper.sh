#!/bin/bash
php8_path="/Applications/MAMP/bin/php/php8.3.14/bin/php"
fixer_path="$(dirname "$0")/vendor/bin/php-cs-fixer"

"$php8_path" "$fixer_path" "$@"

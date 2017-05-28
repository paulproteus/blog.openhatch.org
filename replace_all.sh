bash replace_file.sh //openhatch.org/static/packed/openhatch.css?1407021888
bash replace_file.sh //openhatch.org/static/images/base/landing/feed-icon-16x16-sprited.png
bash replace_file.sh //openhatch.org/static/images/ship.png
bash replace_file.sh //openhatch.org/static/css/jquery-ui-lightness/images/pbar-ani.gif
bash replace_file.sh //openhatch.org/static/images/icons/publish.png
bash replace_file.sh //openhatch.org/static/images/icons/delete.png
bash replace_file.sh //openhatch.org/static/images/icons/delete-citation.png
bash replace_file.sh //openhatch.org/static/images/profile/portfolio/portfolio-entry-bg.png
bash replace_file.sh //openhatch.org/static/images/wannahelp-button-bg.png
bash replace_file.sh //openhatch.org/static/images/wannahelp-button-bg-active.png
bash replace_file.sh //openhatch.org/static/images/wannahelp-button-bg-hover.png
bash replace_file.sh //openhatch.org/static/images/wannahelp-button-bg-hover-active.png
bash replace_file.sh //openhatch.org/static/images/bg-translucent-green.png
bash replace_file.sh //openhatch.org/static/images/dark-hatch.png
bash replace_file.sh //openhatch.org/static/packed/header.js?1404446267
bash replace_file.sh //openhatch.org/static/images/the-logo-bluegreen-87px.png
bash replace_file.sh https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js
replace '<input style="float: none;" type="submit" name="email-button" value="Subscribe">' '<input style="float: none;" type="submit" name="email-button" value="Subscribe" disabled="disabled">' -- $(git grep -l '<input style="float: none;" type="submit" name="email-button" value="Subscribe">' | grep -v replace_all.sh)
replace 'No comments yet &#187;' '' -- $(git grep -l -F 'No comments yet &#187;' | grep -v replace_all.sh )

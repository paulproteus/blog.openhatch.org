#!/bin/bash
set -eou pipefail
set -x

pushd downloaded-for-static-snapshot
if echo "$1" | grep -q http ; then
  URL="$1"
else
  URL="https:$1"
fi
wget $URL
FILENAME="$(basename "$URL")"
if echo "$FILENAME" | grep -q -F '?' ; then
  NEW_FILENAME="$(echo $FILENAME | sed 's,[?].*,,')"
  mv "$FILENAME" "$NEW_FILENAME"
  FILENAME="$NEW_FILENAME"
fi
echo $FILENAME
git add .
popd

replace "$URL" '/downloaded-for-static-snapshot/'"$FILENAME" -- $(git grep -l "$1")
git commit -a -m 'Replaced file automatically via script: '"$URL"

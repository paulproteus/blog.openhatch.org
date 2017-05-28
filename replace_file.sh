#!/bin/bash
set -eou pipefail
set -x

pushd downloaded-for-static-snapshot
wget "$1"
git add .
popd

replace "$1" '/downloaded-for-static-snapshot/'"$(basename "$1" )" -- $(git grep -l "$1")
git commit -a -m 'Replaced file automatically via script: '"$1"

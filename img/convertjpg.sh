#! /bin/bash
for f in *.jpg
do
	
    #[[ "$f" != tn_* ]] && convert "${f}" -quality 75 -define webp:lossless=true "tn_${f}"
    IFS="."
    read -a strarr <<< "$f"
    echo $f "--" ${strarr[0]}
    convert "${strarr[0]}.jpg" -quality 75 -define webp:lossless=true "${strarr[0]}.webp"
	    
done

cat <<- 'EOF' > resume.html
<head> 
<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
</head>
EOF

markdown intro.md >> resume.html;

echo "<a href='http://www.classicfoo.xyz/about/about.html'>About me</a>" >> resume.html

markdown employment.md >> resume.html;

markdown education.md >> resume.html;

markdown interests.md >> resume.html;

DATE=`date +%e-%b-%Y`

cat << 'EOF' >> resume.html
Last edited: 
EOF

echo $DATE >> resume.html;

echo "<a href='http://www.classicfoo.xyz/resume/resume.pdf'>[Download the latest version]</a>" >> resume.html


#create pdf
~/programs/wkhtmltox/bin/wkhtmltopdf resume.html resume.pdf

evince resume.pdf &

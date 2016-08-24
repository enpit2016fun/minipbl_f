{\rtf1\ansi\ansicpg932\cocoartf1404\cocoasubrtf470
{\fonttbl\f0\fnil\fcharset0 Monaco;}
{\colortbl;\red255\green255\blue255;\red38\green38\blue38;\red252\green252\blue252;\red107\green0\blue109;
\red10\green86\blue216;\red245\green245\blue245;\red15\green112\blue1;\red3\green53\blue197;\red1\green30\blue103;
\red98\green98\blue98;\red192\green0\blue4;}
\paperw11900\paperh16840\margl1440\margr1440\vieww28600\viewh15620\viewkind0
\deftab720
\pard\pardeftab720\parhyphenfactor20\partightenfactor0

\f0\fs24 \cf2 \cb3 \expnd0\expndtw0\kerning0
(\cf4 function\cf5  \cf2 ()\cf5  \cf2 \{\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb6 \'a0\'a0\'a0\'a0\cf2 $(\cf7 "#go"\cf2 ).\cf8 click\cf2 (\cf4 function\cf2 ()\cf5  \cf2 \{\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf8 html2canvas\cf2 (\cf9 document\cf2 .\cf8 getElementById\cf2 (\cf7 "target"\cf2 ),\cf5  \cf2 \{\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb6 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf9 onrendered\cf5 : \cf4 function\cf5  \cf2 (\cf9 canvas\cf2 )\cf5  \cf2 \{\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf4 var\cf5  \cf9 dataURI\cf5  = \cf9 canvas\cf2 .\cf8 toDataURL\cf2 (\cf7 "image/jpeg"\cf2 );\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf10 \cb6 \'a0\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf4 var\cf5  \cf9 pdf\cf5  = \cf4 new\cf5  \cf8 jsPDF\cf2 ();\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf10 \cb6 \'a0\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf9 pdf\cf2 .\cf8 addImage\cf2 (\cf9 dataURI\cf2 ,\cf5  \cf7 'JPEG'\cf2 ,\cf5  \cf11 0\cf2 ,\cf5  \cf11 0\cf2 );\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb6 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf9 pdf\cf2 .\cf8 save\cf2 (\cf7 'sample.pdf'\cf2 );\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf2 \}\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb6 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf2 \});\cf5 \'a0\'a0\'a0\'a0\'a0\'a0\'a0\'a0\cf0 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf5 \cb3 \'a0\'a0\'a0\'a0\cf2 \});\cf0 \cb1 \
\pard\pardeftab720\parhyphenfactor20\partightenfactor0
\cf2 \cb6 \});}
#! /bin/bash
echo 'Escriba un comentario y luego presione <Enter>:'
read msg

git add .;

git commit -m $msg;
git push origin master; 

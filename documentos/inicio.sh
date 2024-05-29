#!/bin/bash
echo "Como te chamas"
read NOME
for I in `find | grep htm`
do
	sed -i "s/NOME/$NOME/g" $I
done

#! /bin/bash
input=$@
host=$(echo $input|cut -f1 -d":")
branch=$(echo $input|cut -f2 -d":")
ip=$(echo $input|cut -f3 -d":")
path=$(echo $input|cut -f4 -d":")
if [[ -z $input ]]
then
echo "Error! U need type ex: host:branch"
exit
fi

echo "Branch: $branch"
echo "Host: $host"
echo "IP=$ip"
echo "PATH=$path"

#Functions fucking bash
function deploy {
ssh $ip <<EoF
cd $path &&
git pull origin $branch
EoF
}

deploy
if grep -q "autoindex on;" /etc/nginx/sites-enabled/lhawick
then sed -i 's/autoindex on;/autoindex off;/' /etc/nginx/sites-enabled/lhawick
elif grep -q "autoindex off;" /etc/nginx/sites-enabled/lhawick
then sed -i 's/autoindex off;/autoindex on;/' /etc/nginx/sites-enabled/lhawick
fi

service nginx restart
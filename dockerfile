FROM nginx
EXPOSE 80
COPY ./webku/ /usr/share/nginx/html/
CMD ["nginx","-g","daemon off;"]

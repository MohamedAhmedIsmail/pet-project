From node:latest

WORKDIR /home/server

RUN npm install -g json-server


COPY db.json /home/server/db.json

copy alt.json /home/server/alt.json

Expose 3000

ENTRYPOINT ["json-server","--host","0.0.0.0"]

CMD ["db.json"]
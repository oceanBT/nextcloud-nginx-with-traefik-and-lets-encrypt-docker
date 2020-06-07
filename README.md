# nextcloud-nginx-with-traefik-and-lets-encrypt-docker
Simple docker-compose deployment for nextcloud setup. Including Trafik reverse proxy with automated lets encrypt and nginx webserver.
All you need is a domain at [on of these registrars](https://docs.traefik.io/v2.2/https/acme/#dnschallenge).

# Usage

* download or clone this repo.
* ```cp example.env .env```
* add two new subdomain like `nextcloud.YOURDOMAIN.com` and `traefik.YOURDOMAIN.com` in your DNS-Server (or deposit it at your registrar) with the server IP. Since the propagation can take up to 24 hours, an entry should be made in the hosts file at the beginning, so that the name resolution works immediately.

* edit .env (replace all REPLACE_ME values)
* ```docker-compose up ``` (the first run takes a few minutes to create the certificate.)
* open `nextcloud.YOURDOMAIN.com`

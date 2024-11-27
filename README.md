# Clean Magento for Plugin development and Testing
## Requirements
- Docker
- Docker Compose

## Running on ARM64 machines
see docker-compose.yml selenium image

## Installation
1. Clone this repository
2. Run `docker-compose up -d`
3. Run `docker compose exec magento composer install`
4. Run `docker compose exec bin/magento setup:upgrade`
5. Add the following line to your hosts file: `127.0.0.1 magento.local`
6. Open `http://magento.local` in your browser
7. For admin panel open `http://magento.local/m2_admin` in your browser

## Development
Put modules for development & testing into `app/code` and run `docker compose exec bin/magento setup:upgrade`

## Run tests
Just run `docker compose exec magento ./runtests.sh`
you can also skip the setup by adding a ``--skip-setup`` flag at the end

### See what selenium is doing
open `http://localhost:7900/?autoconnect=1&resize=scale&password=secret` in your browser
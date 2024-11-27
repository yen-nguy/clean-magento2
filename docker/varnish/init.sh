#!/bin/bash

sleep 3 # Sleep for 3 seconds

mkdir -p /etc/varnish/secrets
echo ${VARNISH_SECRET} > /etc/varnish/secrets/secret

set -x

OPS=()
OPS=("-j none")
OPS+=("-F")
OPS+=("-a :${VARNISH_FRONTEND_PORT}")
OPS+=("-T :6082")
OPS+=("-S /etc/varnish/secrets/secret")
OPS+=("-p thread_pool_min=${VARNISH_THREAD_POOL_MIN}")
OPS+=("-p thread_pools=${VARNISH_THREAD_POOLS}")
OPS+=("-p cli_timeout=${VARNISH_CLI_TIMEOUT}")
OPS+=("-s file,/var/lib/varnish/varnish_storage.bin,${VARNISH_STORAGE}")

if [[ -a /etc/varnish/configs/default.vcl ]]; then

OPS+=("-f  /etc/varnish/configs/default.vcl")

else

OPS+=("-b ${VARNISH_BACKEND_HOST}:${VARNISH_BACKEND_PORT}")

fi

varnishd ${OPS[*]};
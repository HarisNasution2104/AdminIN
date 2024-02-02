FROM gitpod/workspace-full

USER gitpod

RUN bash -lc "source /home/gitpod/.nvm/nvm.sh && nvm install 14 && npm install -g yarn"

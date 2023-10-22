FROM node:14-alpine

WORKDIR /app

COPY package*.json ./
COPY . .

RUN npm install && npm run build

EXPOSE 8080

CMD [ "npm", "run", "serve" ]
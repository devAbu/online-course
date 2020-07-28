const http = require('http')
const express = require('express');
const fs = require('fs');
const {
  userInfo
} = require('os');

const app = express();

app.get('/listUsers', (req, res) => {
  fs.readFile(__dirname + '/' + "users.json", utf8, (err, data) => {
    console.log(data)
    res.end(data)
  })
})

http.createServer((req, res) => {
  res.writeHead(200, {
    'Content-Type': 'text-plain'
  })
  res.write('Abu \n')
  res.end('Hello world') //end the response --> res.end()
}).listen(8000, () => {
  const host = process.env.address
  const port = process.env.PORT || 3000
  console.log(`Running at ${host} ${port}`)
})

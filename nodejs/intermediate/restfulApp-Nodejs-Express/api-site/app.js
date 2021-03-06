const express = require('express');
const mongoose = require('mongoose');

const app = express();
const port = process.env.PORT || 3000;
const bookRouter = express.Router();
const db = mongoose.connect('mongodb://localhost:27017/library2')
const Book = require('./models/bookModel')

bookRouter.route('/books')
  .get((req, res) => {
    Book.find((err, books) => {
      if (err) {
        return res.send(err)
      }
      return res.json(books)
    });
  });

app.use('/api', bookRouter)

app.get('/', (req, res) => {
  res.send('Welcome to my API')
})

app.listen(port, () => {
  console.log(`Running on port ${port}`)
})

const express = require('express');

const bookRouter = express.Router();

function router(nav) {
  const books = [{
      title: 'War and Peace',
      genre: 'Historical',
      author: 'Abu',
      read: false,
    },
    {
      title: 'Juhu',
      genre: 'HUJU',
      author: 'Abu',
      read: false,
    },
    {
      title: 'Super lose',
      genre: 'juhu huju',
      author: 'ljepotan',
      read: false,
    },
  ];

  bookRouter.route('/').get((req, res) => {
    res.render('books', {
      title: 'Books',
      nav,
      books,
    });
  });

  bookRouter.route('/single/:id').get((req, res) => {
    const {
      id,
    } = req.params;

    res.render('book', {
      title: 'Books',
      nav,
      book: books[id],
    });
  });

  return bookRouter;
}

module.exports = router;

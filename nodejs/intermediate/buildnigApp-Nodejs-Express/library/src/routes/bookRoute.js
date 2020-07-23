const express = require('express');
const mssql = require('mssql');

const bookRouter = express.Router();

function router(nav) {
  bookRouter.route('/').get((req, res) => {
    (async function query() {
      const request = new mssql.Request();

      const result = await request.query('select * from books');

      res.render('books', {
        title: 'Books',
        nav,
        books: result.recordset,
      });
    }());
  });

  bookRouter.route('/single/:id')
    .all((req, res, next) => {
      (async function query() {
        const {
          id,
        } = req.params;
        const request = new mssql.Request();

        const result = await request.query(`select * from books where id = ${id}`);
        /* await request.input('id', sql.Int, id).query('select * from books where id = @id') */

        /* req.bookId = result.recordset[0]; */
        [req.bookId] = result.recordset;
        next();
      }());
    })
    .get((req, res) => {
      res.render('book', {
        title: 'Books',
        nav,
        book: req.bookId,
      });
    });

  return bookRouter;
}

module.exports = router;

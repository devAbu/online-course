const express = require('express');
const router = express.Router();

router.get('/', (req, res, next) => {
  res.send('Hello');
})

router.get('/json', (req, res, next) => {
  let data = {
    greeting: 'Hello'
  }
  res.json(data);
  /* res.json({
  greeting: 'Hello'
  }) */
})

router.get('/home', (req, res, next) => {
  res.render('home', null);
})

module.exports = router;

const express = require('express');
const router = express.Router();

const profiles = {
  abu: {
    name: 'abu',
    company: 'self',
    languages: ["nodejs", "js", "php"],
    image: '../images/image1.png'
  },
  combe: {
    name: 'combe',
    company: 'aboc',
    languages: ["html", "bootstrap", "css"]
  },
  kum: {
    name: 'kum',
    company: 'knjiga',
    languages: ["mysql", "mongodb", "sql"]
  },
}

router.get('/', (req, res, next) => {
  res.send('Hello');
})

router.get('/json', (req, res, next) => {
  let data = {
    greeting: 'Hello',
    timestamp: req.timestamp.toString()
  }
  res.json(data);
  /* res.json({
  greeting: 'Hello'
  }) */
})

router.get('/home', (req, res, next) => {
  res.render('home', {
    text: 'Dynamic data'
  });
})

router.get('/query', (req, res) => {
  const name = req.query.name
  const age = req.query.age

  const data = {
    name, // == name: name
    age, // age: age
  }

  res.render('profile', data) // req.query
})

router.get('/:param', (req, res) => {
  const param = req.params.param

  res.json({
    data: param
  })
})

/* router.get('/:profile/:username', (req, res) => {
  const profile = req.params.profile
  const username = req.params.username

  res.json({
    profile: profile,
    username: username
  })
}) */

router.get('/:profile/:username', (req, res) => {
  const profile = req.params.profile
  const username = req.params.username
  const currentProfile = profiles[profile]

  if (currentProfile == null) {
    res.json({
      confirmation: 'failed',
      message: 'Profile ' + profile + ' not found!'
    })
  } else {
    /* res.json({
      confirmation: success,
      profile: currentProfile
    }) */
    res.render('profile', currentProfile)
  }
})

router.post('/post', (req, res) => {
  const body = req.body // POST form

  res.json({
    confirmation: 'success',
    data: body
  })
})

module.exports = router;

import { db } from './test2.js'

db.collection('users')
    .add({
      first: 'Dez',
      last: 'Chuang',
      gender: 'male'
    })
    .then(function(docRef) {
      console.log('Document written with ID: ', docRef.id)
    })
    .catch(function(error) {
      console.error('Error adding document: ', error)
    })

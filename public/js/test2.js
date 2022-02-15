const firebaseConfig = {
    apiKey: "AIzaSyDU4SMG9hpVMear3YN1aPtV8ABFuu2yHjM",
    authDomain: "python-f1901.firebaseapp.com",
    projectId: "python-f1901",
    storageBucket: "python-f1901.appspot.com",
    messagingSenderId: "985398112505",
    appId: "1:985398112505:web:2b3a195194fcbfc38a3228",
    measurementId: "G-R9185X2PHH"
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig)
  const db = firebase.firestore()
  
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

import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import {
  getFirestore,
  getDocs,
  collection,
  addDoc,
  doc,
  updateDoc,
} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js";
const firebaseConfig = {
  apiKey: "AIzaSyDI6ldQx14IuT_wEDt6Er076im2ukfeRzQ",
  authDomain: "wjjhni.firebaseapp.com",
  databaseURL: "https://wjjhni-default-rtdb.firebaseio.com",
  projectId: "wjjhni",
  storageBucket: "wjjhni.appspot.com",
  messagingSenderId: "919936662501",
  appId: "1:919936662501:web:cc53bfe12ad5580f33cd0c",
  measurementId: "G-DNYPTYJ55N",
};

const app = initializeApp(firebaseConfig);
const db = getFirestore();

// export const getAcademicForms = () => {
//     // for get docs and all data in collection
//     return getDocs(collection(db, "academic_forms")); // from firestore
//   };

// for read all data of collection (academic_forms)
//   window.addEventListener("DOMContentLoaded", async (e) => {
//     const querySnapshot = await getAcademicForms(); // return array
//     querySnapshot.forEach((doc) => {
//         console.log(doc.data()); // for get data line by line doc
//     });
// });

// for add data in collection
export const uploadDocument = async (file_url, name) => {
  const docRef = await addDoc(collection(db, "academic_forms"), {
    file_url,
    name,
  });
  console.log("Document written with ID: ", docRef.id);

  await updateDoc(doc(db, "academic_forms", docRef.id), {
    id: docRef.id,
  });
  console.log("Field 'id' added to the document with ID: ", docRef.id);

};

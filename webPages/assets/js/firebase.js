import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import {
  getFirestore,
  getDocs,
  collection,
  addDoc,
  doc,
  updateDoc,
  deleteDoc, 
  query, 
  where,
  setDoc
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

export const deletePreviousDocument = async (name) => {
  const q = query(collection(db, "academic_forms"), where("name", "==", name));
  const querySnapshot = await getDocs(q);

  
  querySnapshot.forEach((doc) => {
    deleteDoc(doc.ref);
    console.log("Document deleted with ID: ", doc.id);
  });
};

// for add data in collection
export const uploadDocument = async (file_url, name) => {
  try {

  const docRef = await addDoc(collection(db, "academic_forms"), {
    file_url: file_url,
    name: name
  });
  console.log("Document written with ID: ", docRef.id);


  const updatedData = {
    id: docRef.id
  };


  await setDoc(doc(db, "academic_forms", docRef.id), updatedData, { merge: true });
  console.log("Field 'id' added to the document with ID: ", docRef.id);

} catch (error) {
  console.error("Error adding document to Firebase:", error);
}
  
};


export const notify = async (name) => {

  const currentDate = new Date();
  const notificationRef = await addDoc(collection(db, "genral_notifcation"), {
    date : currentDate,
    message: "تمت إضافة/تحديث نموذج "+name ,
    title: "النماذج",
  });
  console.log("New notification document written with ID: ", notificationRef.id);

}
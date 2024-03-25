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


const updateTable = async () => {
  const documents = await getDocs(collection(db, "academic_forms"));

  const tableBody = document.querySelector("#forms-table tbody");
  tableBody.innerHTML = "";

  documents.forEach((doc) => {
    const data = doc.data();
    const createTime = data.createTime;
    const carbon = moment(createTime).format("YYYY-MM-DD HH:mm:ss");

    const row = `
      <tr>
        <td>${data.name}</td>
        <td>${carbon}</td>
      </tr>
    `;

    tableBody.innerHTML += row;
  });
};


// for add data in collection
export const uploadDocument = async (file_url, name) => {
  
  const docRef = await addDoc(collection(db, "academic_forms"), {
    file_url,
    name,
    createTime: new Date().toISOString(),
  });
  console.log("Document written with ID: ", docRef.id);

  await updateDoc(doc(db, "academic_forms", docRef.id), {
    id: docRef.id,
  });
  console.log("Field 'id' added to the document with ID: ", docRef.id);

};


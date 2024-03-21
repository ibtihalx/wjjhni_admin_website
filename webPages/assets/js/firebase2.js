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
    var flag = 0;
    var parentCollectionRef;
    var nestedCollectionRef;
  if ( name === "تقنية المعلومات مسار أمن سيبراني" || name === "تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي" || name === "تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء"){
     parentCollectionRef = doc(collection(db, "plans"),"flsZC6Uxs6FjIn62ovsP");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 1;
  } else if ( name === "نظم المعلومات"){
     parentCollectionRef = doc(collection(db, "plans"),"xsk2UX0coJM3hphUTEwF");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 2;
  } else if ( name === "هندسة البرمجيات"){
     parentCollectionRef = doc(collection(db, "plans"),"PpkfVJBQ9TVJ2BXkc0cb");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 3 ;
  } else if (name === "علوم الحاسب"){
     parentCollectionRef = doc(collection(db, "plans"),"76htH8Hrg6TEPZYnzbX1");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 4;
  }
  const docRef = await addDoc(nestedCollectionRef, {
    url: file_url,
    course_name: name,
  });
  console.log("Document written with ID: ", docRef.id);

  if (flag == 1){
    await updateDoc(doc(collection(db, "plans", "flsZC6Uxs6FjIn62ovsP", "courses"), docRef.id), {
        id: docRef.id,
    });
  } else if (flag == 2){
    await updateDoc(doc(collection(db, "plans", "xsk2UX0coJM3hphUTEwF", "courses"), docRef.id), {
        id: docRef.id,
    });
  } else if (flag == 3){
    await updateDoc(doc(collection(db, "plans", "PpkfVJBQ9TVJ2BXkc0cb", "courses"), docRef.id), {
        id: docRef.id,
    });
  }else if (flag == 4){
    await updateDoc(doc(collection(db, "plans", "76htH8Hrg6TEPZYnzbX1", "courses"), docRef.id), {
        id: docRef.id,
    });
  };
  console.log("Field 'id' added to the document with ID: ", docRef.id);

};

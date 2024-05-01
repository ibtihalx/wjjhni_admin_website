import { uploadDocument, deletePreviousDocument ,notify} from "./firebase.js";

const uploadDocumentBtn = document.getElementById("uploadDocumentBtn");
const selectImageBtn = document.getElementById("selectImageBtn");
const getImageDataInput = document.getElementById("getImageDataInput");
const options = document.getElementById("options");

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

const app = firebase.initializeApp(firebaseConfig);

var storage = firebase.storage();

const inp = document.querySelector(".inp");
const fileData = document.querySelector(".filedata");
const loading = document.querySelector(".loading");
let file;
let fileName;
let isLoading = false;
let uploadedFileName;
const selectImage = () => {
  inp.click();
};

selectImageBtn.onclick = selectImage;

var selectedOption = "";

function getSelectedOption() {
  selectedOption = document.getElementById("options").value;

  console.log(selectedOption);
}

options.onchange = getSelectedOption;

const getImageData = (e) => {
  file = e.target.files[0];
  var stringWithUnderscores = selectedOption.replace(/ /g, "_");
  fileName = stringWithUnderscores;

  if (fileName) {
    fileData.style.display = "block";
  }
  fileData.innerHTML = file.name + "   تم اختيار ";

  console.log(file, fileName);
};

getImageDataInput.onchange = getImageData;

var URL = "";

const uploadImage = () => {
  deletePreviousDocument(document.getElementById("options").value);
  loading.style.display = "block";
  const storageRef = storage.ref().child("MyForms");
  const fileRef = storageRef.child(fileName);
  const uploadtask = fileRef.put(file);

  uploadtask.on(
    "state_changed",
    async (snapshot) => {
      const progress = Math.round(
        (snapshot.bytesTransferred / snapshot.totalBytes) * 100
      );
      console.log("Upload is " + progress + "% done");
    },
    (error) => {
      console.log("Upload failed", error);
    },
    () => {
      (async () => {
        try {
          const snapshot = await uploadtask.snapshot;
          const downloadURL = await snapshot.ref.getDownloadURL();
          console.log("File available at", downloadURL);
          await uploadDocument(downloadURL, document.getElementById("options").value);
          notify(document.getElementById("options").value);
          console.log(downloadURL, "downloadURL");
          window.location.href = window.location.pathname+"?success=true";
        } catch (error) {
          console.error("Error occurred during upload:", error);
        }
      })();
    }
  );
};

uploadDocumentBtn.onclick = uploadImage;


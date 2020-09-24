// console.log("hello world1");
// var a = "10";

// var b = 20;

// console.log(a - b);

// function getSum(a, b) {
//   return a + b;
// }

// const getSum = (a, b) => a + b;

// let sum = getSum(10, 20);

// console.log("sun: ", sum);

// ES6

// for (var i = 0; i < 3; i++) {
//   var j = i * 2;
// }
// console.log(i); // 3
// console.log(j); // 4

// for (let k = 0; k < 3; k++) {
//   let l = k * 2;
// }
// console.log(typeof k); // undefined
// console.log(typeof l); // undefined

// if (true) {
//   let item = 10;
// }

// const person = {
//   age: 10,
//   name: "Karim",
//   versity: "KSM",
// };
// console.log(typeof person);

// const _person = [10, "karim", "KSM"];
// console.log(typeof _person);

window.onload = function (event) {
  // const tag = document.getElementsByTagName("a");
  // const tag = document.getElementsByClassName("button");

  let counter = 0;

  const tag = document.getElementById("new_button");
  if (tag) {
    tag.addEventListener("click", function (event) {
      event.preventDefault();
      counter++;
      // tag.style.color = "red";
      tag.innerHTML = `<span> you clicked me (${counter}) </span>`;
      // tag.innerHTML = "<span> you clicked me (" + counter + ") </span>";

      console.log("classlist:", event.target);

      if (!tag.classList.contains("btn")) {
        tag.classList.add("btn");
      }

      if (tag.classList.contains("danger")) {
        tag.classList.remove("danger");
      } else {
        tag.classList.add("danger");
      }
    });
  }

  let storage = {};

  const form = document.getElementById("single_form");
  const submit = document.getElementById("submit");
  const fields = form.querySelectorAll("input, select, textarea");
  fields.forEach((field) => {
    // console.log("field: ", field.tagName, field);
    if (field.tagName === "SELECT" || field.type === "checkbox" || field.type === "radio") {
      field.addEventListener("change", function (event) {
        const value = event.target.value;
        const name = event.target.name;
        storage = { ...storage, [name]: value };
        console.log("storage:", storage);
      });
    } else {
      field.addEventListener("keyup", function (event) {
        const value = event.target.value;
        const name = event.target.name;
        storage = { ...storage, [name]: value };
        console.log("storage:", storage);
      });
    }
  });

  submit.addEventListener("click", (event) => {
    event.preventDefault();
    console.log("Final Data:", storage);
  });
  // console.log("fields: ", fields);
};

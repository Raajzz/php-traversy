function fn() {
  console.log("from fn");
}

console.log(fn);

fn.abc = "abc";

console.log(fn);

fn();
console.log(fn.abc);

const person = {
  name: "Raaj",
  id: 1,
  key: () => {
    console.log("anon function");
  },
};

let func = () => {
  console.log("something inside");
}

func();

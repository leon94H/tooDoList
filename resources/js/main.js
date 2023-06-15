
// Mark tasks event

let completed = JSON.parse(localStorage.getItem('completed') || '[]');
let todolist = document.querySelectorAll('#list');

todolist.forEach((item, index) => {
  if (completed.includes(index)) {
    item.style.textDecoration = 'line-through';
  }

  item.addEventListener('click', () => {
    if (completed.includes(index)) {
      completed.splice(completed.indexOf(index), 1);
      item.style.textDecoration = 'none';
    } else {
      completed.push(index);
      item.style.textDecoration = 'line-through';
    }

    localStorage.setItem('completed', JSON.stringify(completed));
  });
});
















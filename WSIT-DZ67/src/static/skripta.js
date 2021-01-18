const onInputChange = (e) => {
    const data = document.querySelectorAll('.data');
    data.forEach((d) => {
      if (
        !d.childNodes[1].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[3].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[5].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[7].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[9].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[11].textContent.toLowerCase().includes(e.target.value.toLowerCase()) &&
        !d.childNodes[13].textContent.toLowerCase().includes(e.target.value.toLowerCase())
      ) {
        d.classList.add('d-none');
      }
      else {
        d.classList.remove('d-none');
      }
    });
  };

  const checkData = (link, input) => {
    const data = document.querySelectorAll('.data');
    data.forEach((d) => {
      if (
        !d.childNodes[1].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[3].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[5].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[7].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[9].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[11].textContent.toLowerCase().includes(input.toLowerCase()) &&
        !d.childNodes[13].textContent.toLowerCase().includes(input.toLowerCase())
      ) {
        console.log()
        d.classList.add('d-none');
      }
      else {
        d.classList.remove('d-none');
      }
    });
  }
  const onLinkClick = (e) => {
    const input = document.getElementById('pretraga');
    input.value = e.target.innerHTML
    checkData(e.target.innerHTML, input.value)
    window.scroll(0,0)
  }
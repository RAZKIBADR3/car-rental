let dateD = new Date();
let dateF = new Date();
const changePrix = (etat = '', input = null) => {
    if(etat == 'dateD'){
        dateD = new Date(input.value);
    }else if(etat == 'dateF'){
        dateF = new Date(input.value);
    }
    const timeDiff = dateF.getTime() - dateD.getTime();
    let daysDiff = Math.floor(timeDiff / (1000 * 3600 * 24));
    if(daysDiff <= 1){
        daysDiff = 1;
    }
    const prix = document.querySelector('input[type="hidden"]#prix').value;
    document.querySelector('input[type="number"]#prix_location').value = prix * daysDiff;
}
changePrix();

// let test = new Date('2010-10-15');
// console.log(test);

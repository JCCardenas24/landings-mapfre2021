$(document).ready(function () {

    $('input[name="birthday"]').val('');
    $('input[name="birthday"]').attr("placeholder", "Fecha de nacimiento*");
});

/**
 * Funcionalidades
 */
const nCompleto = document.getElementById('nombre');
const cPostal = document.getElementById('codigo');
const correo = document.getElementById('mail');
const phone = document.getElementById('telefono');
const car = document.getElementById('marca');
const year = document.getElementById('anio');
const btnData = document.getElementById('sendData');
const inpts = document.querySelectorAll('.validate');
const btnCotizar = document.getElementById('cotizar');

inpts.forEach(element => {
    element.addEventListener('focusout', function() {
        let inptValid = document.querySelectorAll('.fa-check.d-none').length+1;
        console.log(inptValid);
        if(inptValid === 3) {
            btnData.removeAttribute('disabled');
        } else {
            btnData.setAttribute('disabled', true);
        }
    })
});


btnData.addEventListener('click', function() {
    window.location.href = 'thanks.php'
});

nCompleto.addEventListener('focusout', function() {
    let vNom = validateString(this, this.value);
    if(vNom == true) {
        document.querySelector('.validNom.fa-check').classList.remove('d-none');
        document.querySelector('.validNom.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validNom.fa-times').classList.remove('d-none');
        document.querySelector('.validNom.fa-check').classList.add('d-none');
    }
});

cPostal.addEventListener('focusout', function() {
    let vNom = validateNumber(this, this.value);
    if(vNom == true) {
        document.querySelector('.validCodigo.fa-check').classList.remove('d-none');
        document.querySelector('.validCodigo.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validCodigo.fa-times').classList.remove('d-none');
        document.querySelector('.validCodigo.fa-check').classList.add('d-none');
    }
});


correo.addEventListener('focusout', function() {
    let vMail = validateMail(this, this.value);
    if(vMail == true) {
        document.querySelector('.validMail.fa-check').classList.remove('d-none');
        document.querySelector('.validMail.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validMail.fa-times').classList.remove('d-none');
        document.querySelector('.validMail.fa-check').classList.add('d-none');
    }
});

phone.addEventListener('focusout', function() {
    let vPhone = validateNumber(this, this.value);
    if(vPhone == true) {
        document.querySelector('.validPhone.fa-check').classList.remove('d-none');
        document.querySelector('.validPhone.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validPhone.fa-times').classList.remove('d-none');
        document.querySelector('.validPhone.fa-check').classList.add('d-none');
    }
});

car.addEventListener('focusout', function() {
    let vCar = validateString(this, this.value);
    if(vCar == true) {
        document.querySelector('.validMarca.fa-check').classList.remove('d-none');
        document.querySelector('.validMarca.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validMarca.fa-times').classList.remove('d-none');
        document.querySelector('.validMarca.fa-check').classList.add('d-none');
    }
});

year.addEventListener('focusout', function() {
    let vYear = validateNumber(this, this.value);
    if(vYear == true) {
        document.querySelector('.validAnio.fa-check').classList.remove('d-none');
        document.querySelector('.validAnio.fa-times').classList.add('d-none');
    } else {
        document.querySelector('.validAnio.fa-times').classList.remove('d-none');
        document.querySelector('.validAnio.fa-check').classList.add('d-none');
    }
});

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} strInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y sólo contiene letras
 */
function validateString(objInp, strInp) {
    let reg = /^[a-zA-Z\u00C0-\u00FF\s]*$/;
    clearStyles(objInp)
    if(strInp != '' && reg.test(strInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} numInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y sólo contiene números
 */

function validateNumber(objInp, numInp) {
    let reg = /^\d+$/
    clearStyles(objInp);
    if(numInp != '' && reg.test(numInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

/**
 * @author Juan Carlos Cárdenas
 * @param {Object} objInp - La etiqueta que se obtiene
 * @param {String} strInp - El valor de la etiqueta
 * @returns {Boolean} - True si se cumple que no es vacio y tiene estructura correcta de mail
 */

function validateMail(objInp, strInp) {
    let reg = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    clearStyles(objInp);
    if(strInp != '' && reg.test(strInp)) {
        objInp.classList.add('is-valid');
        return true;
    } else {
        objInp.classList.add('is-invalid');
        return false;
    }
}

function clearStyles(objElem) {
    objElem.classList.remove('is-valid');
    objElem.classList.remove('is-invalid');
}
import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


// chiedere conferma

const forms = document.querySelectorAll('.delete-form')

console.log(forms)

forms.forEach(form => {

    form.addEventListener('submit',(e) => {
        e.preventDefault()

        if(confirm('Vuoi eliminare questo post?')) {
            form.submit()
        }
    })

})
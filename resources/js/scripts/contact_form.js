window.addEventListener("load", function()
{
    const contact_form = document.querySelector("#contact_form")
    const contact_form_success = document.querySelector('#contact_form_success')

    const csrf_token = contact_form.querySelector('input[name=_token]')

    const email = contact_form.querySelector('input[name=email]')
    const subject = contact_form.querySelector('input[name=subject]')
    const message = contact_form.querySelector('textarea[name=message]')

    contact_form.addEventListener("submit", (event) =>
    {
        event.preventDefault();

        let form = event.target
        let data = new FormData(form)

        fetch(form.action,
    {
            method: form.method,
            body: data,
            headers:
            {
                'X-CSRF-TOKEN': csrf_token.value,
                'X-Requested-With':'XMLHttpRequest'
            }
        })
        .then((response) =>
        {
            if(response.status == 200)
            {
                contact_form_success.classList.toggle('hidden')

                email.value = '';
                subject.value = '';
                message.value = '';
            }

        }).catch((error) =>
        {
            console.log(error)
        });

    });

});
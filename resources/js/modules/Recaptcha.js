export const generateRecaptchaToken = async function()
{
    return grecaptcha.execute('6LcVj6olAAAAAMdMl_Id9fHhfr9KsLm6hCm-utin', {action: 'submit'});
}
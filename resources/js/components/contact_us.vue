<script setup>

// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from '../modules/Recaptcha.js'

// values passed into the component
const props = defineProps(['csrf']);

// ref allows these fields to be bound to an input and updated dynamically
const email = ref('');
const subject = ref('');
const message = ref('');

let successful_submission = false;

async function submit(event)
{
      let form = event.target
      let data = new FormData(form);

      let recaptchaToken = await generateRecaptchaToken();
      data.append('token',recaptchaToken);

      fetch(form.action,
  {
          method: form.method,
          body: data,
          headers:
              {
                'X-CSRF-TOKEN': props.csrf,
                'X-Requested-With':'XMLHttpRequest'
              }
      })
      .then((response) =>
      {
        if(response.status === 200)
        {
          successful_submission = true;

          email.value = '';
          subject.value = '';
          message.value = '';
        }
      });
}

</script>

<template>
  <div>

    <div v-if="successful_submission" id="contact_form_success" class="p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-50" role="alert">
      <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as possible.
    </div>

    <form class="space-y-8" id="contact_form" method="post" action="/!/forms/contact_form" @submit.prevent="submit">

      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-typo-primary">Your email</label>
        <input type="email" name="email" id="email"
               class="block p-2.5 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm"
               placeholder="name@gmail.com"
               required
               v-model="email">
      </div>

      <div>
        <label for="subject" class="block mb-2 text-sm font-medium text-typo-primary">Subject</label>
        <input type="text" name="subject" id="subject"
               class="block p-3 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm"
               placeholder="Let us know how we can help you"
               required
               v-model="subject">
      </div>

      <div class="sm:col-span-2">
        <label for="message" class="block mb-2 text-sm font-medium text-typo-primary">Your message</label>
        <textarea id="message" name="message" rows="6"
                  class="block p-2.5 w-full text-sm text-typo-primary bg-gray-50 rounded-lg border border-gray-300 shadow-sm"
                  placeholder="Leave a comment..."
                  required
                  v-model="message"></textarea>
      </div>

      <button type="submit"
              class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary">Send message</button>
    </form>
  </div>
</template>
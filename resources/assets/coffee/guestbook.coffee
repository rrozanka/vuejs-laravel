###
  * Guestbook scripts.
  *
###
Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').attr 'value';

new Vue
  el: '#guestbook'

  data:
    newMessage:
      name: ''
      message: ''
    messages: []
    submitted: false

  computed:
    errors: () ->
      if this.newMessage.name == '' || this.newMessage.message == ''
        return true

      return false

  ready: () ->
    this.fetchMessages()

  methods:
    fetchMessages: () ->
      this.$http.get '/api/messages', (messages) ->
        this.$set 'messages', messages

    onSubmitForm: () ->
      message = this.newMessage

      this.messages.push message

      this.newMessage = { name: '', message: '' }

      this.submitted = true

      this.$http.post 'api/messages', message
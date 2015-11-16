
/*
  * Guestbook scripts.
  *
 */

(function() {
  Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').attr('value');

  new Vue({
    el: '#guestbook',
    data: {
      newMessage: {
        name: '',
        message: ''
      },
      messages: [],
      submitted: false
    },
    computed: {
      errors: function() {
        if (this.newMessage.name === '' || this.newMessage.message === '') {
          return true;
        }
        return false;
      }
    },
    ready: function() {
      return this.fetchMessages();
    },
    methods: {
      fetchMessages: function() {
        return this.$http.get('/api/messages', function(messages) {
          return this.$set('messages', messages);
        });
      },
      onSubmitForm: function() {
        var message;
        message = this.newMessage;
        this.messages.push(message);
        this.newMessage = {
          name: '',
          message: ''
        };
        this.submitted = true;
        return this.$http.post('api/messages', message);
      }
    }
  });

}).call(this);

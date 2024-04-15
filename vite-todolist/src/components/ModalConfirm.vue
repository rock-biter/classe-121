<template>
  <div v-if="open === true" class="modal-wrapper">
    <div class="modal">
      <p>Se sicuro di eliminare questo todo?</p>
      <div class="actions">
        <button @click="$emit('allowed')" data-confirm="si">SI</button>
        <button @click="$emit('denied')" data-confirm="no">NO</button>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      open: {
        type: Boolean,
        default: false
      }
    }
  }
</script>

<style lang="scss" scoped>
.modal-wrapper {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(black, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;

  .modal {
    background: white;
    padding: 16px;
    border-radius: 8px;

    .actions {
      display: flex;
      gap: 12px;
      justify-content: center;
      margin-top: 12px;

      button {
        border: none;
        line-height: 24px;
        padding: 0 12px;
        border-radius: 999px;
        cursor: pointer;

        &[data-confirm="si"] {
          background: lightgreen;
        }

        &[data-confirm="no"] {
          background: salmon;
        }

        &:hover {
          background: black;
          color: white;
        }
      }
    }

  }
}


</style>
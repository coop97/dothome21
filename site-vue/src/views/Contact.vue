<template>
  <div class="light">
    <Header />
    <main id="main">
      <section id="scriptCont">
        <div class="container"></div>
        <ContInfo />
      </section>
      <!-- //aboutCont -->
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
import ContInfo from '../components/ContInfo.vue';
export default {
  components: {
    Header,
    Footer,
    ContInfo,
  },
};
</script>

<style lang="scss">
// main__cont
#mainCont {
  height: 100vh;
  background-color: #000;
  display: flex;
  justify-content: center;
  align-items: center;
}
.main__cont {
  color: #fff;
  font-size: 10vw;
  line-height: 0.85;
  letter-spacing: -0.0275em;
  transition: all 2s;
  text-transform: uppercase;
  font-family: 'saol';

  .l2 {
    margin-left: 9vw;
  }
  .l3 {
    margin-left: 18vw;
  }
}
.main__cont.tact {
  div:nth-child(2) {
    margin-left: 9vw;
  }
  div:nth-child(3) {
    margin-left: 18vw;
  }
}
</style>

<template>
  <div class="light">
    <Header />
    <main id="main">
      <section id="referCont">
        <div class="container">
          <WrapTitle name1="REFERENCE" name2="BOOK" />
        </div>
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
import WrapTitle from '../components/WrapTitle.vue';
import ContInfo from '../components/ContInfo.vue';
export default {
  components: {
    Header,
    Footer,
    WrapTitle,
    ContInfo,
  },
};
</script>

<style lang="scss">
// about__cont
//refer__cont
#referCont {
  background-color: #000;
  color: #fff;
  padding-bottom: 300px;
}
.refer__cont {
  .table {
    border-bottom: 2px solid #000;
    margin-top: 1.2rem;

    h3 {
      padding: 10px;
      cursor: pointer;
    }

    .tabs {
      display: flex;
    }

    ul {
      border-top: 1px solid #fff;
    }

    li {
      margin: 0;
      list-style: none;
      border-bottom: 1px solid #fff;
      position: relative;
      transition: all 0.3s;
      overflow: hidden;

      &:hover {
        background: rgba(255, 255, 255, 0.081);
      }

      span {
        display: inline-block;
        float: left;
        padding: 25px 10px;
        font-size: 14px;
        font-family: 'S-CoreDream-3Light';
        box-sizing: border-box;

        &:nth-child(1) {
          width: 5%;
          text-align: center;
        }
        &:nth-child(2) {
          width: 10%;
        }
        &:nth-child(3) {
          width: 70%;
        }
        &:nth-child(4) {
          width: 15%;
        }
      }
    }
  }
}

.referCont {
  background-color: #000;
  color: #fff;
}
.refer__detail {
  font-family: 'SCoreDream';
  font-weight: 300;
  padding-bottom: 300px;
  background: #000;

  h3 {
    font-size: 40px;
    margin-bottom: 10px;
    color: #fff;
  }
  p {
    background: #000;
    padding: 22px 20px 20px 20px;
    margin-bottom: 10px;
    color: #fff;
  }
  table {
    font-family: 'SCoreDream';
    width: 100%;
    border: 1px solid #dad8d1;
    text-align: left;
    color: #fff;

    td,
    th {
      font-weight: normal;
      padding: 14px 12px 12px 12px;
      line-height: 1.5;
      vertical-align: middle;
      border-bottom: 1px solid #dad8d1;
      border-right: 1px solid #dad8d1;
    }
  }
  li {
    list-style-type: disc;
    margin-left: 20px;
    line-height: 1.6;
    color: #fff;
  }
  h4 {
    font-size: 20px;
    margin-bottom: 10px;
    margin-top: 50px;
    background: #000;
    color: #fff;
    display: inline-block;
    padding: 3px 6px 1px 6px;
  }
  .list-btn {
    margin-top: 50px;
    border: 1px solid #dad8d1;
    text-align: center;
    display: block;
    font-family: 'S-CoreDream-3Light';
    padding: 20px;
    transition: all 0.3s;
    color: #fff;

    &:hover {
      background: #fff;
      color: #000;
    }
  }
}
</style>

/* eslint-disable */

import React, { useState } from 'react';
import logo from './logo.svg';
import './App.css';

function App() {

  let [글제목, 글제목변경] = useState(['남자 코트 추천', '강남 우동 맛집', '꽃집 추천']);
  let [date, 날짜변경] = useState(['2월 17일 발행', '3월 2일 발행', '5월 4일 발행']);
  let [따봉, 따봉변경] = useState(0);

/*   function 제목바꾸기(){
    var newArray = [...글제목];
    newArray[0] = '여자 코트 추천';
    글제목변경( newArray );
  }
 */
/* 
  function 제목바꾸기(){
    var secondArray = [...글제목];
    if(secondArray[0] === '남자 코트 추천'){
      secondArray[0] = '여자 코트 추천';
    } else {
      secondArray[0] = '남자 코트 추천';
    }
    글제목변경(secondArray)
  }
 */

  function 제목바꾸기(){
    var thirdArray = [...글제목].sort();
    글제목변경(thirdArray);
  }

  let posts = '강남 고기 맛집';
  
  return (
    <div className="App">
      <div className="black-nav">
        <div>개발 Blog</div>
      </div>
      <button onClick={ 제목바꾸기 }>버튼</button>
      <div className="list">
        <h3> { 글제목[0] } <span onClick={ () => { 따봉변경(따봉 + 1) } }>👍</span> {따봉} </h3>
        <p>{ date[0] }</p>
        <hr/>
      </div>
      <div className="list">
        <h3> { 글제목[1] } </h3>
        <p>{ date[1] }</p>
        <hr/>
      </div>
      <div className="list">
        <h3> { 글제목[2] } </h3>
        <p>{ date[2] }</p>
        <hr/>
      </div>

      <Modal />

    </div>
  );
}

function Modal(){
  return (
    <div className="modal">
      <h2>제목</h2>
      <p>날짜</p>
      <p>상세내용</p>
    </div>
  )
}

export default App;

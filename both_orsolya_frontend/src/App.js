import { useContext, useState } from 'react';
import './App.css';
import Tablazat from './components/Tablazat';
import useApiContext from './context/ApiContext';

function App() {
  const {tema} = useApiContext();
  const {szavak, setSzavak} = useApiContext();
  const {getAdat} = useApiContext();

  return (
    <div className="App">
      <h6>Szótár</h6>
      <select className='valaszto' onChange={(e) => {
        if(e.target.value > 0){
          getAdat(`/szavak/${e.target.value}`, setSzavak)
        }}}>
        <option  key="0" value="0">Válassz témát!</option>
        { tema.map((elem) => (
          <option  key={elem.id} value={elem.id}>{elem.temanev}</option>
        ))}
      </select>
      <div className='feladatok'>
        <Tablazat kertElemek={szavak}/>
      </div>
      <div>
        <p>Pontszám: </p>
      </div>
    </div>
  );
}

export default App;

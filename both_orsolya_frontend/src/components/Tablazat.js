import React from 'react'
import useApiContext from '../context/ApiContext';
import TablazatSor from './TablazatSor';

function Tablazat(props) { 

  return (
    <div>
        <div className='fejlec'>
            <div>Angol</div>
            <div>Magyar</div>
            <div>Visszajelzés</div>
        </div>
        { props.kertElemek.map((elem) => (
            <TablazatSor key={elem.id} index={elem.id} elem={elem}/>
        ))}
    </div>
  )
}

export default Tablazat

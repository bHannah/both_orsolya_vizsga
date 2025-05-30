import React from 'react'
import useApiContext from '../context/ApiContext'

function TablazatSor(props) {
  return (
    <div className='feladat'>
        <div>{props.elem.angol}</div>
        <div>
            <input type="text" id={props.elem.id} name="valasz"></input>
        </div>
        <div className="javitas"></div>
    </div>
  )
}

export default TablazatSor

dim cFolder

MsgBox("THIS PROGRAM WILL : " & vbCrLf & vbCrLf & _
"1. Open a local excel file (test.xlsx)" & vbCrLf & _
"2. Add the current date to a cell" & vbCrLf & _
"3. Save the spreadsheet to the same directory with the current date as the name")

cFolder = inputbox("Enter the path where to open & save the spreadsheet","Spreadheet Path",_
"C:\Users\mep\Desktop\")


Set objExcel = CreateObject("Excel.Application")
Set objWorkbook = objExcel.Workbooks.Open(cFolder & "test.xlsx")

objExcel.Application.Visible = True
objWorkbook.Sheets("Sheet1").Cells(1, 3).Value = "=today()"
objExcel.Calculate

' PREPARE 'GRID DATA' ARRAY FOR INPUT
	Dim arrGridData()
	Erase arrGridData ' clear the array										' No delcaration of size - so can use a variable in ReDim
	ReDim arrGridData(7,5)					' row and column

	vMsgBoxString	= " The array ""ARRAYGRID()"" values below were read from the spreadsheet"_
	& vbCrLf & " They should now be available in memory:"_
	&vbCrLf & vbCrLf & "if you can find them?" & vbCrLf & vbCrLf
	vExcelRow 	= 4
	vExcelCol	= 1
	vArrayRow	= 0

	Do While vExcelRow <> 12
		For j = 0 To 5
			arrGridData(vArrayRow, j) = objExcel.ActiveSheet.Cells (vExcelRow, vExcelCol)
			If j = 5 Then
			vMsgboxString = vMsgBoxString & arrGridData(vArrayRow, j)
			Else
			vMsgboxString = vMsgBoxString & arrGridData(vArrayRow, j) & ", "
			End If

			vExcelCol = vExcelCol + 1

		Next

		vMsgboxString = vMsgboxString & vbCrLf
		vExcelCol	= 1
		vExcelRow = vExcelRow + 1
		vArrayRow = vArrayRow + 1
	Loop

MsgboxString = MsgboxString & vbCrLf & vbCrLf & "Click OK to save the spreadsheet And End the program"

MsgBox(vMsgboxString)


'WScript.Sleep 120000

objWorkbook.SaveAs cFolder & timeStamp() & ".xlsx"

' objworkbook.Saved = True
objWorkbook.Close

objExcel.Quit

Set objWorkbook = Nothing
Set objExcel = Nothing

Function timeStamp()
    Dim t
    t = Now
    timeStamp = Year(t) & "-" & _
    Right("0" & Month(t),2)  & "-" & _
    Right("0" & Day(t),2)  & "_" & _
    Right("0" & Hour(t),2) & _
    Right("0" & Minute(t),2) '    '& _    Right("0" & Second(t),2)
End Function
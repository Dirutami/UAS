import matplotlib.pyplot as plt
import pandas as pd

data = pd.read_csv('data_grafik.csv')

counts = data.groupby('wilayah').size()

fig = counts.plot(kind='bar', figsize=(10,4)).get_figure()

plt.title('banyak wilayah')
plt.xlabel('Jenis Usaha')
plt.ylabel('Jumlah')

fig
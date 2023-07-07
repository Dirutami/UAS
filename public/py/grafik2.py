import matplotlib.pyplot as plt
import pandas as pd

data = pd.read_csv('data_grafik.csv')

counts = data.groupby('kecamatan').size()

fig = counts.plot(kind='bar', figsize=(10,4)).get_figure()

plt.title('banyak kecamatan')
plt.xlabel('Jenis Usaha')
plt.ylabel('Jumlah')

fig


